<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDonationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'donor_name' => 'required|string',
            'campaign_id' => 'required|exists:App\Models\Campaign,id',
            'amount' => 'required|integer'
        ];
    }
}
