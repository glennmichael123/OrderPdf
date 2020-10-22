@extends('layouts.app')

@section('content')
<table>
    <tbody>
        <tr>
            <td>
                <span class="font-weight-bold" style="font-size: 1.5rem;"> Easy Cloud </span>
            </td>
            <td>
                <div>Easy Cloud</div>
                <div>Cebu City, Philippines 6000</div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><span class="font-weight-bold" style="font-size: 1.5rem;">PCR System Result</span></td>
        </tr>
    </tbody>
</table>

<hr style="border: 1px solid #b5baf7;"/>
<div class="text-right">
    Date Printed: {{ date('m/d/Y', strtotime($created_at)) }}
</div>
<table class="table table-bordered pt-3 pb-3">
    <tbody>
        <tr>
            <td>Order No.: </td>
            <td class="font-weight-bold">{{ $order_number }}</td>
        </tr>
        <tr>
            <td>Customer: </td>
            <td class="font-weight-bold">{{ $customer_name }}</td>
        </tr>
        <tr>
            <td>Address: </td>
            <td class="font-weight-bold">{{ $customer_address }}</td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td class="font-weight-bold">{{ $email }}</td>
        </tr>
    </tbody>
</table>
<div class="text-center font-weight-bold">
    RESULT
</div>
<hr />

@if (strtolower($result) == 'negative')
<div class="text-success">
    {{  $result }}
</div>
@else
<div class="text-danger">
    {{  $result }}
</div>
@endif

@endsection

