<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Par défaut, vous pouvez modifier cela en fonction de vos besoins d'autorisation.
    }

  
    public function rules()
    {
        if ($this->is('auth/register')) {
            return [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:auths,email',
                'password' => 'required|string|confirmed',
                'role' => 'required|string',
                'date' => 'required|date',
            ];
        } elseif ($this->is('auth/login')) {
            return [
                'email' => 'required|email',
                'password' => 'required|string',
            ];
        }
        
        return []; // Valeur de retour par défaut lorsque aucune condition ne correspond
    }
    

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Le champ nom est requis.',
            'name.string' => 'Le champ nom doit être une chaîne de caractères.',
            'name.max' => 'Le champ nom ne peut pas dépasser :max caractères.',
            'email.required' => 'Le champ email est requis.',
            'email.email' => 'Le champ email doit être une adresse email valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password.string' => 'Le champ mot de passe doit être une chaîne de caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'role.required' => 'Le champ rôle est requis.',
            'role.string' => 'Le champ rôle doit être une chaîne de caractères.',
            'date.required' => 'Le champ date est requis.',
            'date.date' => 'Le champ date doit être une date valide.',
        ];
    }
}
