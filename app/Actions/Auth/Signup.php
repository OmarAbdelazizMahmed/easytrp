<?php

namespace App\Actions\Auth;

use App\Http\Requests\Actions\Auth\SignupRequest;
use App\Http\Resources\TravelerResource;
use App\Models\Traveler;
use Lorisleiva\Actions\Concerns\AsController;
use Propaganistas\LaravelPhone\PhoneNumber;


class Signup
{
    use AsController;

    public function handle(SignupRequest $request)
    {
        $data = $request->validated();
        $phone = $this->formatePhoneNumber($data['phone']);
        $traveler = $this->create($phone);

        return TravelerResource::make($traveler);
    }

    public function create($data)
    {
        return Traveler::create($data);
    }

    private function formatePhoneNumber($phone)
    {
        $phoneNumber = str_replace(' ', '', $phone);

        $handler = substr($phoneNumber, 0, 3);

        $regexEG = '/[0][1][0]|[0][1][1]|[0][1][2]|[0][1][5]|[0][0][2]|[+][2][0]|[2][0][1]|[1][0]|[1][1]|[1][2]|[1][5]/';

        preg_match($regexEG, $handler, $matchesEG);

        return PhoneNumber::make(ltrim($phoneNumber, '0'), 'EG')->formatInternational();
    }
}
