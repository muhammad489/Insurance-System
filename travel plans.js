const product = [
    {
        id: 0,
        
        title: '<b>Basic Plan</b> <br> <p style="font-size:medium";>Coverage for emergency medical expenses.</p>',
        price: 12,
    },
    {
        id: 1,
        
        title: '<b>Comprehensive Plan</b><br> <p style="font-size:medium";>coverage including baggage loss and travel delay..</p>',
        price: 60,
    },
    {
        id: 2,
        //image: 'image/ee-3.jpg',
        title: '<b>Value Plan</b> <br><p style="font-size:medium";>Coverage for expenses and trip cancellations...</p>',
        price: 15,
    },
    {
        id: 3,
        //image: 'image/aa-1.jpg',
        title: '<b>Premium Plan</b><br><p style="font-size:medium";> Top-tier coverage with benefits such as trip interruption..</p>',
        price: 100,
    }
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "₹ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}