@extends('master')
@section('content')

<div class="custom-product">

        <div class="col-sm-10">
            <div class="container">
                <h2>Basic Table</h2>
                <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
                <table class="table">
                  <thead>
                    <tr>
                      <td>Amount</td>
                      <td>$ {{ $total }}</td>
                      {{-- <th>Email</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tax</td>
                      <td>$ 0</td>
                      {{-- <td>john@example.com</td> --}}
                    </tr>
                    <tr>
                      <td>Delivery</td>
                      <td>$ 10</td>
                      {{-- <td>mary@example.com</td> --}}
                    </tr>
                    <tr>
                      <th>Total Amount</th>
                      <th>$ {{ $total + 10 }}</th>
                      {{-- <td>july@example.com</td> --}}
                    </tr>
                  </tbody>
                </table>
                <div>
                    <form action="/orderplace" method="POST">
                        @csrf
                        <div class="form-group">

                          <textarea name="address" class="form-control" id='address' placeholder="Enter your address"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="pwd">payment method:</label> <br><br>
                          <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>
                          <input type="radio" value="cash" name="payment"><span>COD</span><br><br>

                          {{-- <input type="password" class="form-control" id="pwd" placeholder="Enter password"> --}}
                        </div>

                        <button type="submit" class="btn btn-default">Order Now</button>
                      </form>
                </div>
              </div>

</div>
</div>

@endsection
