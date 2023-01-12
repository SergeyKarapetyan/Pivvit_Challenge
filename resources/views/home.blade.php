@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <input type="text" class="input" placeholder="Donor Name" id="name" />
                    <br/>
                    <input type="text" class="input" placeholder="Amount" id="amount" />
                    <br />
                    <select id="campaign">
                        <option value="">Select campaign</option>

                        @foreach ($campaigns as $campaign)
                            <option value=“{{ $campaign->id }}“>{{ $campaign->title }}</option>
                        @endforeach
                    </select>
                    <br />
                    <button class="button" id="submit" onclick="submit()">Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    let token = "{{ $token }}"
    
    function submit(e) {
        fetch('/api/donations', {
            method: 'POST', 
            headers: {
                'Accept': 'application/json',
                'Authorizarion': 'Bearer ' + token,
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')?.toString()
            },
            body: {
                donor_name: document.getElementById('name').value,
                campaign_id: document.getElementById('campaign').value,
                amount: document.getElementById('amount').value,
            }
        }).then()
    } 
</script>