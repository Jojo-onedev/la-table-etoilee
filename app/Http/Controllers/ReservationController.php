<?php
namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmed;

class ReservationController extends Controller {

    public function index()
{

        $reservations = Reservation::orderBy('date', 'asc')->orderBy('time', 'asc')->paginate(10);
    
        return view('reservations.index', compact('reservations'));
    }


    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required|string|date_format:H:i',
        'guests' => 'required|integer|min:1',
        'notes' => 'nullable|string',
    ], [
        'name.required' => 'Le champ nom est obligatoire.',
        'email.required' => 'Le champ email est obligatoire.',
        'email.email' => 'Veuillez fournir une adresse email valide.',
        'phone.required' => 'Le champ téléphone est obligatoire.',
        'date.required' => 'Le champ date est obligatoire.',
        'date.after_or_equal' => 'La date doit être aujourd\'hui ou plus tard.',
        'guests.required' => 'Veuillez indiquer le nombre de personnes.',
        'guests.min' => 'Le nombre de personnes doit être au moins 1.',
        'guests.max' => 'Le nombre de personnes ne peut pas dépasser 20.',
        'time.required' => 'Le champ heure est obligatoire.',
        'time.date_format' => 'Veuillez fournir une heure valide.',
    ]);

    // Générer un code unique pour le suivi
    $validated['tracking_code'] = Str::upper(Str::random(10));

    $reservation = Reservation::create($validated);

    // Envoi d'un email de confirmation
    Mail::to($reservation->email)->send(new ReservationConfirmed($reservation));

    return redirect()->back()->with('success', 'Votre réservation a été enregistrée avec succès. Votre code de suivi est : ' . $reservation->tracking_code . ' Copiez-le pour suivre votre réservation.');
}

public function update(Request $request, Reservation $reservation)
{
    $validated = $request->validate([
        'status' => 'required|in:En attente,Acceptée,Refusée',
    ]);

    $reservation->update($validated);

    return redirect()->route('reservations.index')->with('success', 'Le statut de la réservation a été mis à jour avec succès.');
}

public function track()
{
    return view('trackings.track');
}

public function search(Request $request)
{
    $validated = $request->validate([
        'tracking_code' => 'required|string',
        'email' => 'required|email',
    ]);

    $reservation = Reservation::where('tracking_code', $validated['tracking_code'])
                              ->where('email', $validated['email'])
                              ->first();

    if ($reservation) {
        return view('trackings.details', compact('reservation'));
    }

    return redirect()->route('reservation.track')->with('error', 'Aucune réservation trouvée avec ces informations.');
}


// Delete reservation
public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);

    $reservation->delete();

    return redirect()->route('reservations.index')->with('success', 'La réservation a été supprimée avec succès.');

}

}