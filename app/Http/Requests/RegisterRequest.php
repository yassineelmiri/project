<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Déterminer si l'utilisateur est autorisé à effectuer cette demande.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Par défaut, autorise toutes les requêtes. Vous pouvez personnaliser cette logique si nécessaire.
    }

    /**
     * Obtenir les règles de validation qui s'appliquent à la demande.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|confirmed',
            'role' => 'required|string',
            'date' => 'required|date',
        ];
    }
}
