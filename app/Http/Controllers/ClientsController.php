<?php
namespace App\Http\Controllers;

use App\Http\Requests\ClientsRequest;
use App\Services\CSVService;
use Illuminate\Http\Request;

/**
 * Class ClientsController
 * @package App\Http\Controllers
 */
class ClientsController extends Controller
{
    /**
     * @var CSVService
     */
    protected $csvService;


    /**
     * ClientsController constructor.
     * @param CSVService $csvService
     */
    public function __construct(CSVService $csvService)
    {
        $this->csvService = $csvService;
    }

    /**
     * Home Page of our application.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allData = $this->csvService->getAllData(getCSVFile());

        return view('clients.index', compact('allData'));
    }

    /**
     * Show the form for add the data to CSV.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store the data from form to CSV.
     *
     * @param ClientsRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientsRequest $request)
    {
        $clientsInfo = $request->all();

        $this->csvService->storeData($clientsInfo);

        return redirect()->route('home')->with('message', 'Successfully added the data.');

    }

    /**
     * Display the description for the particular data.
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $details = $this->csvService->getDetail($id);

        if ($details) {
            return view('clients.show', compact('details'));
        }

        return redirect()->route('home')->with('message', 'Sorry Could not get fetch the data');

    }
}
