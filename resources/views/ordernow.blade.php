@extends('master')
@section('content')
<div class="">
    <div class="col-sm-10">
        <table class="table">
        <tbody>
            <tr>
                <td> Amount </td>
                <td> ${{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td> $ 0</td>  
            </tr>
            <tr>
                <td>Delivery Charge</td>
                <td>$ 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td> $ {{$total}} </td>
            </tr>
        </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" type="text" cols="50" rows="2" placeholder="Enter Your Address"></textarea>

                </div>
                <div class="form-group">
                    <label for="payment">Payment Method</label> <br><br>
                    <input type="radio" name="payment"> <span>Online Payment</span> <br> <br>
                    <input type="radio" name="payment"> <span>EMI Payment</span> <br> <br>
                    <input type="radio" name="payment" value="Cash"> <span>Payment On Cash</span> <br> <br>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Order Now</button>
                </div>
            </form>
</div>

    </div>
</div>

@endsection