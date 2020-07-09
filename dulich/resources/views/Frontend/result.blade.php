<?php $data = Session::get('data'); ?>

<table width="100%" cellspacing="3" cellpadding="3" style="font-family:arial;font-size:12px;margin-left:35px">
    <tr>
        <td width="25%"><span class="label_book"> Method Payment </span></td>
        <td> {{ $data['paymentMethod'] }} </td>
    </tr>
    <tr>
        <td><span class="label_book"> OrderInfo </span></td>
        <td><p style="color: red">{{ $data['orderID'] }}</p>  </td>
    </tr>
    <tr>
        <td><span class="label_book"> txnResponseCode </span></td>
        <td><p style="color: red">{{ $data['txnResponseCode'] }}</p></td>
    </tr>
   
    <tr>
        <td><span class="label_book"> Result </span></td>
        <td><p style="color: red">{{ $data['messages'] }}</p> </td>
    </tr>

     <tr>
        <td><span class="label_book"> Total </span></td>
        <td><p style="color: red">{{ $data['amount'] }}</p> </td>
    </tr>

    <tr>
        <td><span class="label_book"> Transaction </span></td>
        <td><p style="color: red">{{ $data['transactionNo'] }}</p> </td>
    </tr>
</table>

