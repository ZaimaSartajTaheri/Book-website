<?php
include('includes/config.php');
$quantity=0;
$totalPrice=0;
$deliveryCharge=0;
$grossAmount=0;
$requestPayload=file_get_contents("php://input");
$object=json_decode($requestPayload,true);
if($object!=NULL){
    var_dump($object);
    $productName=$object["productName"];
    $productImage=$object["productImage"];
    $singleProductPrice=$object["singleProductPrice"];
    $singleProductPriceWithTax=$object["singleProductPriceWithTax"];
    $firstName=$object["firstName"];
    $lastName=$object["lastName"];
    $companyName=$object["companyName"];
    $email=$object["email"];
    $mobileNumber=$object["mobileNumber"];
    $zipCode=$object["zipCode"];
    $state=$object["state"];
    $city=$object["city"];
    $houseName=$object["houseName"];
    $apartmentNum=$object["apartmentNum"];
    $quantity=$object["quantity"];
    $totalPrice=$object["totalPrice"];
    $deliveryCharge=$object["deliveryCharge"];
    $grossAmount=$object["grossAmount"];
    $paymentMethod=$object["paymentOption"];
   
    mysqli_query($con,"INSERT INTO  orderdetails(productId,firstName,lastName,companyName,email,mobileNumber,zipCode,state,city,houseName,apartmentNum,productQuantity,price,deliveryFee,totalPrice,paymentOption) values('1','$firstName','$lastName','$companyName','$email','$mobileNumber','$zipCode','$state','$city','$houseName','$apartmentNum','$quantity','$totalPrice','$deliveryCharge','$grossAmount','$paymentMethod')");
}



?>
<div class="container cart">
    <form name="item-count" class="form-inline item-input">
        <input class="form-control item-count" type="text" name="product" required="required" value="5">
        <p class="item-count-label form-control my-2" type="submit" name="search">冊</p>
    </form>
    <button class="pink-btn btn add-to-cart">カートに入れる</button>

    <h4 class="price">定価<span>1,500円</span>（税別）</h4>
    <div class="cart-table">
        <table>
            <caption class="table-caption">■ カート</caption>
            <col style="width:52%">
            <col style="width:20%">
            <col style="width:15%">
            <col style="width:15%">
            <tr>
                <td>商 品</td>
                <td>1冊(税込）</td>

                <td>数 量</td>

                <td>合計</td>

            </tr>
            <tr>
                <td rowspan="2">
                    <div class="book d-flex">
                        <img class="cart-img" src="./images/cart-image.png" alt="">
                        <p class="ml-2 mt-3 book-name">デザイナーは多様力が9割</p>
                    </div>
                </td>
                <td rowspan="2"><span class="onebook-with-tax">1650</span>円</td>
                <td> <span class="table-quantity">5</span>冊</td>
                <td><span class="Total-price">8250</span>円</td>
            </tr>
            <tr>

                <td>送料</td>
                <td><span class="delivery-charge">500</span>円</td>

            </tr>
        </table>
        <table class="total-price">
            <col style="width:50%">
            <col style="width:50%">
            <tr>
                <td>合計（税込）</td>
                <td><span class="gross-amount">13250</span>円</td>
            </tr>
        </table>
    </div>

</div>
<!-- customer details -->

<section class="container customer-details " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
    data-aos-duration="1000">
    <div>
        <h3>■ 配送先住所</h3>
    </div>
    <div>
        <form class="customer-form-details">
            <!-- role="form" method="post" -->
            <div class="success"></div>
            <div class="error"></div>
            <div class="input-group-sm">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded mb--5 lastName" name="lastName"
                            placeholder="氏">

                    </div>

                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded firstName" name="firstName" placeholder="名">

                    </div>
                    <div class="firstNameError"></div>
                </div>
            </div>
            <div class=" input-group-sm">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <input type="text" class="form-control h-75 rounded companyName" name="companyName"
                            placeholder="会社・団体名">

                    </div>
                    <div class="companyNameError"></div>

                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded email" name="email" placeholder="e-mail">

                    </div>
                    <div class="emailError"></div>
                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded mobileNumber" name="mobileNumber"
                            placeholder="電話番号">

                    </div>
                    <div class="mobileNumberError"></div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-6 col-md-6">
                        <input type="text" class="form-control h-75 rounded zipCode" name="zipCode" placeholder="郵便番号">
                    </div>

                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded state" name="state" placeholder="住所/都道府県">

                    </div>
                    <div class="stateError"></div>

                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded city" name="city" placeholder="市区町村">

                    </div>
                    <div class="cityError"></div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded houseName" name="houseName"
                            placeholder="番地">

                    </div>
                    <div class="houseNameError"></div>

                    <div class="col-6">
                        <input type="text" class="form-control h-75 rounded apartmentNum" name="apartmentNum"
                            placeholder="マンション・アパート名">
                    </div>
                </div>
            </div class=' btn-group-lg'>
            <div>
                <div>
                    <div>
                        <h3>■ お支払い方法</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="radio">
                                    <input type="radio" name="payment" class="payment" id="radio1" value="銀行振込">
                                    <label for="radio1">
                                        銀行振込
                                    </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="payment" class="payment" id="radio2" value="クレジットカード">
                                    <label for="radio2">
                                        クレジットカード
                                    </label>
                                </div>
                            </div>
                            <div class="paymentError"></div>
                        </div>
                    </div>
                </div>
                <div class="submit-btn-content">
                    <button type="submit" name="submit" class="btn submit-btn">決済へ進む</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- bank tranfer -->
<div class="bank-transfer-description container" data-aos="slide-up" data-aos-offset="200" data-aos-delay="50"
    data-aos-duration="1000">
    <h3 class="text-center">ご注文頂きまして誠にありがとうございます！</h3>
    <div class="pink-text">
        <h3>銀行振込</h3>
    </div>
    <table border="1">

        <col style="width:52%">
        <col style="width:20%">
        <col style="width:15%">
        <col style="width:15%">
        <tr>
            <td>商 品</td>
            <td>1冊(税込）</td>

            <td>数 量</td>

            <td>合計</td>

        </tr>
        <tr>
            <td>
                <p class="ml-2 mt-3 book-name">デザイナーは多様力が9割</p>

            </td>
            <td>1650円</td>
            <td>冊</td>
            <td>円</td>
        </tr>
    </table>
    <div class="row">
        <div class="col-8">
            <div class="input-group">
                <div type="text" class="input-area text-center" readonly id="inputField">
                    <p>ゆうちょ銀行008（ゼロゼロハチ支店）</p>
                    <p>普通口座 4811120 </p>
                </div>
                <label for="inputField" class="label">＜お振込先></label>
            </div>

        </div>
        <div class="col-4">
            <table class="small-table" border="1">
                <col style="width:53.5%">
                <col style="width:50%">

                <tr>
                    <td>送料</td>
                    <td>500円</td>
                </tr>
            </table>
            <table class="small-table" border="1">
                <col style="width:53.5%">
                <col style="width:50%">
                <tr>
                    <td>合計</td>
                    <td>500円</td>

                </tr>
            </table>
        </div>
    </div>
    <div class="description-texts text-center">
        <p>恐れ入りますがお振込の確認が取れ次第発送させて頂きますので
        </p>
        <p>どうぞよろしくお願い致します。
        </p>
        <p>こちらの情報はご登録頂きましたメールアドレスへも
        </p>
        <p>お送り致しますのでご確認の程よろしくお願い申し上げます。</p>
    </div>


</div>
<script type="text/javascript">
const AddToCart = document.querySelector('.add-to-cart');
const buyBtn = document.querySelector('.submit-btn');
const bankTransferDescription = document.querySelector('.bank-transfer-description');

const bankTransfer = document.querySelector('#radio1');
const creditCard = document.querySelector('#radio2');

const cart = {};


bankTransferDescription.style.display = "none";

bankTransfer.addEventListener('click', function() {
    bankTransferDescription.style.display = "block";
});

creditCard.addEventListener('click', function() {
    bankTransferDescription.style.display = "none";
});

AddToCart.addEventListener('click', function() {

    const quantity = document.querySelector('.item-count').value;
    document.querySelector(".table-quantity").innerHTML = quantity;
    const oneBookWithTax = 1500 + 1500 * .1;
    const totalPrice = oneBookWithTax * quantity;
    document.querySelector(".onebook-with-tax").innerHTML = oneBookWithTax;
    document.querySelector(".Total-price").innerHTML = totalPrice;
    const deliveryCharge = 500;
    document.querySelector(".delivery-charge").innerHTML = deliveryCharge;
    const grossAmount = totalPrice + deliveryCharge;
    // console.log(grossAmount);
    document.querySelector(".gross-amount").innerHTML = grossAmount;

    cart.productName = document.querySelector(".book-name").innerHTML;
    cart.productImage = document.querySelector(".cart-img").src;
    cart.singleProductPrice = "1500";
    cart.singleProductPriceWithTax = oneBookWithTax;
    cart.quantity = quantity;
    cart.totalPrice = totalPrice;
    cart.deliveryCharge = deliveryCharge;
    cart.grossAmount = grossAmount;
    buyBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const lastName = document.querySelector(".lastName").value;
        const firstName = document.querySelector(".firstName").value;
        const companyName = document.querySelector(".companyName").value;
        const email = document.querySelector(".email").value;
        const mobileNumber = document.querySelector(".mobileNumber").value;
        const zipCode = document.querySelector(".zipCode").value;
        const state = document.querySelector(".state").value;
        const city = document.querySelector(".city").value;
        const houseName = document.querySelector(".houseName").value;
        const apartmentNum = document.querySelector(".apartmentNum").value;
        const paymentOptions = document.querySelectorAll('input[name="payment"]');
        let selectedValue;
        for (const paymentOption of paymentOptions) {
            if (paymentOption.checked) {
                selectedValue = paymentOption.value;
                break;
            }

        }

        function isEmail(email) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                .test(email);
        }
        cart.lastName = lastName;
        if (firstName != "") {

            cart.firstName = firstName;
        } else {

            document.querySelector(".firstNameError").innerHTML =
                `<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter your Name</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>`;

        }

        cart.companyName = companyName;


        if (email != "") {
            if (isEmail(email)) {
                cart.email = email;
            } else {
                document.querySelector(".emailError").innerHTML =
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter a valid email address</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }


        } else {


            document.querySelector(".emailError").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter an email address</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }
        if (mobileNumber != "") {
            cart.mobileNumber = mobileNumber;
        } else {

            document.querySelector(".mobileNumberError").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter a Mobile Number</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }

        cart.zipCode = zipCode;
        if (state != "") {
            cart.state = state;
        } else {

            document.querySelector(".stateError").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter a State</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }
        if (city != "") {
            cart.city = city;
        } else {

            document.querySelector(".cityError").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter a City</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }


        if (houseName != "") {
            cart.houseName = houseName;
        } else {

            document.querySelector(".houseNameError").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Enter Your House Name</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }

        cart.apartmentNum = apartmentNum;
        if (selectedValue != undefined) {
            cart.paymentOption = selectedValue;
        } else {

            document.querySelector(".paymentError").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Select any Payment Option</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }


        cartJson = JSON.stringify(cart);

        if (cart.email != undefined && cart.firstName != undefined && cart.mobileNumber != undefined &&
            cart.state != undefined &&
            cart.city != undefined && cart.houseName != undefined && cart.paymentOption != undefined) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "cart.php");
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.send(cartJson);
            document.querySelector(".success").innerHTML =
                '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Your order has been placed successfully</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        } else {

            document.querySelector(".error").innerHTML =
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Sorry! There has been a problem</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        }

    });



});
</script>