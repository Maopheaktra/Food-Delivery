
const groupAdd =  document.querySelector('#group-add');
const adds =  document.querySelectorAll('#add');

for(let add of adds){
    add.addEventListener('click', (e)=>{
        let food = e.target.parentElement.parentElement.children[1].children[1].children[0].textContent;
        let price = e.target.parentElement.parentElement.children[1].children[1].children[1].textContent;
        creatCarelist(food, price)
    })
}


function creatCarelist(food, price){

    let cardList = document.createElement('div');
    cardList.setAttribute("class", "gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom");
    let media = document.createElement('div');
    media.setAttribute("class", "media align-items-center");
    let hh = document.createElement('div');
    hh.setAttribute('class', 'mr-2 text-danger');
    let mediaBody = document.createElement('div');
    mediaBody.setAttribute('class', 'media-body');
    let foodname = document.createElement('p');
    foodname.setAttribute('class', 'm-0');
    foodname.textContent = food;

    let mediaLeft = document.createElement('div');
    mediaLeft.setAttribute('class', 'd-flex align-items-center');
    let span = document.createElement('span');
    span.setAttribute('class', 'count-number float-right');
    let btn = document.createElement('button');
    btn.type = 'button';
    btn.setAttribute('class', 'btn-sm left dec btn btn-outline-secondary');
    let i = document.createElement('i');
    i.setAttribute('class', 'feather-minus');
    let input = document.createElement('input');
    input.setAttribute('class', 'count-number-input');
    input.type = 'text';
    input.readOnly;
    input.value = '1';
    let btn3 = document.createElement('button');
    btn3.type = 'button';
    btn3.setAttribute('class', 'btn-sm right inc btn btn-outline-secondary');
    let i1 = document.createElement('i');
    i1.setAttribute('class', 'feather-plus');
    let foodPrice = document.createElement('p');
    foodPrice.setAttribute('class', 'text-gray mb-0 float-right ml-2 text-muted small');
    foodPrice.value = price;
    foodPrice.textContent = price;


    groupAdd.appendChild(cardList);
    cardList.appendChild(media);
    media.appendChild(hh);
   
    cardList.appendChild(mediaLeft);
    media.appendChild(mediaBody);
    mediaBody.appendChild(foodname);

    mediaLeft.appendChild(span);
    mediaLeft.appendChild(foodPrice);
    span.appendChild(btn);
    btn.appendChild(i);
    span.appendChild(input);
    span.appendChild(btn3);
    btn3.appendChild(i1);

    
}
