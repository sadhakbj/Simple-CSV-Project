@extends('layouts.app')
@section('title')
    View Detail for the specific client.
@stop

@section('content')
    <div class="well">
        <h1>View the detail.</h1>
        <table>
            <tr>
                <td>Name:</td>
                <td>{{ $details['Name'] }}</td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>{{ $details['Gender'] }}</td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td>{{ $details['Phone'] }}</td>
            </tr>

            <tr>
                <td>Email:</td>
                <td>{{ $details['Email'] }}</td>
            </tr>

            <tr>
                <td>Address:</td>
                <td>{{ $details['Address'] }}</td>
            </tr>

            <tr>
                <td>Nationality:</td>
                <td>{{ $details['Nationality'] }}</td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td>{{ $details['Date Of Birth'] }}</td>
            </tr>

            <tr>
                <td>Educational Background:</td>
                <td>{{ $details['Educational Background'] }}</td>
            </tr>

            <tr>
                <td>Preferred Mode of Contact:</td>
                <td>{{ $details['Preferred Mode of Contact'] }}</td>
            </tr>

        </table>
    </div>

@stop