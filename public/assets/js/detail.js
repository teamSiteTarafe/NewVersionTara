const detail = () => {
    const btn1 = document.querySelector('.detail');
    const btn2 = document.querySelector('.livraison');
    const btn3 = document.querySelector('.avis');
    
    const text1 = document.querySelector('.detail_text');
    const text2 = document.querySelector('.livraison_text');
    const text3 = document.querySelector('.avis_text');

    btn1.addEventListener('click', ()=>{
        btn1.classList.replace('no_act','act')
        btn2.classList.replace('act','no_act')
        btn3.classList.replace('act','no_act')
        text1.classList.replace('hide','voir')
        text2.classList.replace('voir','hide')
        text3.classList.replace('voir','hide')
    });
    btn2.addEventListener('click', ()=>{
        btn2.classList.replace('no_act','act')
        btn1.classList.replace('act','no_act')
        btn3.classList.replace('act','no_act')
        text2.classList.replace('hide','voir')
        text1.classList.replace('voir','hide')
        text3.classList.replace('voir','hide')
    });
    btn3.addEventListener('click', ()=>{
        btn3.classList.replace('no_act','act')
        btn1.classList.replace('act','no_act')
        btn2.classList.replace('act','no_act')
        text3.classList.replace('hide','voir')
        text1.classList.replace('voir','hide')
        text2.classList.replace('voir','hide')
    });
}
detail();
