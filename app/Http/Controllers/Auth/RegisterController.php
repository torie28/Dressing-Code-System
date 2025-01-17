<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Tribe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        // Fetch the list of tribes from the database
        $tribes = Tribe::all(); // Adjust as per your table and model

        // Pass the list of tribes to the view
        return view('auth.register', compact('tribes'));
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'tribe' => 'required|exists:tribes,id', // Make sure tribe ID exists in the tribes table
            'password' => 'required|string|min:3|confirmed', // Ensure you have 'password_confirmation' in the form
        ]);

        // Create the user in the database
        $user = $this->create($validatedData);

        // Redirect based on the selected tribe
        if ($request->tribe == 1) { // Replace with the actual ID for Sukuma
            return redirect()->route('sukuma-dress-code')->with('success', 'Registration successful! Welcome to Sukuma Tribe.');
        } elseif ($request->tribe == 2) { // Replace with the actual ID for Pare
            return redirect()->route('pare-dress-code')->with('success', 'Registration successful! Welcome to Pare Tribe.');
        } elseif ($request->tribe == 3) { // Replace with the actual ID for Chaga
            return redirect()->route('chaga-dress-code')->with('success', 'Registration successful! Welcome to Chaga Tribe.');
        }

        // Fallback if tribe is not recognized
        return redirect()->route('home')->with('error', 'Tribe not recognized.');
    }

    protected function create(array $data)
    {
        // Create a new user and hash the password
        $user = User::create([
            'full_name' => $data['full_name'],
            'tribe' => $data['tribe'],
            'password' => Hash::make($data['password']),
        ]);

        return $user; // Return the created user
    }
}
