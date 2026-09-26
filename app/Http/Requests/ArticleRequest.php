<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Sbloccato come fa il prof nel video!
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'subtitle' => 'required',
            'body' => 'required|min:5',
            'image' => 'required|image', // Adattato al nome del nostro campo foto!
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo titolo è richiesto.',
            'title.min' => 'Il titolo deve essere di almeno 3 caratteri.',
            'subtitle.required' => 'Il campo sottotitolo è richiesto.',
            'body.required' => 'Il campo corpo dell\'articolo è richiesto.',
            'body.min' => 'Il corpo deve essere di almeno 5 caratteri.',
            'image.required' => 'Il campo immagine è richiesto.',
            'image.image' => 'Il file selezionato deve essere un\'immagine.',
        ];
    }
}
