@extends('layouts.app')

@section('title', 'Inquiry')

@section('content')
    <div class="container inquiry">
        <form id="inquiry" action="{:url('products/inquiry')}" method="post" role="form" >
            <div class="inquiry-title"><h2>Inquiry Detail</h2></div>
            <div class="form-group">
                <label class="control-label" >PRODUCTS :</label>
                <input type="text" class="form-control" id="products" name="products" value="" >
            </div>
            <div class="form-group">
                <label class="control-label">NAME :</label>
                <input type="text" class="form-control" id="name" name="name" value="" onblur="validate('name')">
                <span id="notice_name" style="color:Red;display:none;">* Please enter your name!</span>
            </div>
            <div class="form-group">
                <label class="control-label">EMAIL :</label>
                <input type="text" class="form-control" id="email" name="email" value="" onblur="validate('email')">
                <span id="notice_email" style="color:Red;display:none;">* Please enter your E-mail address!</span>
                <span id="notice_correct_email" style="color:Red;display:none;">* Please enter an avilable E-mail address!</span>
            </div>
            <div class="form-group ">
                <label class="control-label">QUANTITY :</label>
                <label><input type="radio" name="quantity" value="100PC" checked>100PC</label>
                <label><input type="radio" name="quantity" value="1000PC">1000PC</label>
                <label><input type="radio" name="quantity" value="10000PC">10000PC</label>
                <label><input type="radio" name="quantity" value="CONTAINER">CONTAINER</label>
                <label for="customer">
                    <input type="radio" name="quantity" id="customer" value="">
                    <input id="customerText" type="text" style="width: 70px;">&nbsp PC
                </label>
                <span id="notice_quantity" style="color:Red;display:none;">* Please select your target market!</span>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">MARKET :</label>
                <label><input class="market" type="checkbox" name="market[]" value="ASIA"> ASIA</label>
                <label><input class="market" type="checkbox" name="market[]" value="EUROPE"> EUROPE</label>
                <label><input class="market" type="checkbox" name="market[]" value="AFRICA"> AFRICA</label>
                <label><input class="market" type="checkbox" name="market[]" value="NORTH AMERICA"> NORTH AMERICA</label>
                <label><input class="market" type="checkbox" name="market[]" value="SOUTH AMERICA"> SOUTH AMERICA</label>
                <label><input class="market" type="checkbox" name="market[]" value="OCEANIA"> OCEANIA</label>
                <span id="notice_market" style="color:Red;display:none;">* Please select your target market!</span>
            </div>
            <div class="form-group">
                <input type="hidden" name="product_id" value="{$product_id}">
                <input type="submit" class="btn btn-danger" id="submitBtn" value="Done" onclick="">
                <div class="notice" style="color: red;"></div>
            </div>
        </form>
    </div>

    <script>
        var SCOPE = {
            'post_url' : "{:url('products/validateParam')}"
        };
        $(function(){
            $(document).ready(function(){
                //获取quantity自定义的值
                $("#customer").on('click', function (event) {
                    $("#customerText").focus();
                });
                $("#customerText").on('focus', function (event) {
                    $("#customer").attr("checked", "checked");
                });
                $("#customerText").on('blur', function (event) {
                    $("#customer").attr('value', $(this).val());
                });
            });
        });

    </script>
@endsection