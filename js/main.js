document.getElementById('next').onclick = function(){
    const widthItem = document.querySelector('.product_navbar_item').offsetWidth;
    document.getElementsByClassName('product_navbar_container').scrollLeft += widthItem;
}
document.getElementById('pre').onclick = function(){
    const widthItem = document.querySelector('.product_navbar_item').offsetWidth;
    document.getElementsByClassName('product_navbar_container').scrollLeft -= widthItem;
}