<?php


namespace App\Http\Controllers;


use App\Domain\Services\CurrencyService;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * @var CurrencyService $currencyService
     */
    protected $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public function __invoke(Request $request)
    {
        $typeMethod = strtolower($request->method());
        $method = $typeMethod . 'Currency';

        $response = $this->currencyService->$method();

        return view('index', compact('response'));
    }

}
