
    document.querySelector('.number-in').oninput = () =>{
        document.querySelector('.crdNo').innerText = document.querySelector('.number-in').value;
    }
    
    document.querySelector('.name-in').oninput = () =>{
        document.querySelector('.name').innerText = document.querySelector('.name-in').value;
    }
    
    document.querySelector('.month').oninput = () =>{
        document.querySelector('.expM').innerText = document.querySelector('.month').value;
    }
    
    document.querySelector('.year').oninput = () =>{
        document.querySelector('.expYr').innerText = document.querySelector('.year').value;
    }
    
    document.querySelector('.CVV-in').onmouseenter = () =>{
        document.querySelector('.frnt').style.transform = 'perspective(1000px) rotateY(-180deg)';
        document.querySelector('.Back').style.transform = 'perspective(1000px) rotateY(0deg)';
    }
    
    document.querySelector('.CVV-in').onmouseleave = () =>{
        document.querySelector('.frnt').style.transform = 'perspective(1000px) rotateY(0deg)';
        document.querySelector('.Back').style.transform = 'perspective(1000px) rotateY(180deg)';
    }
    
    document.querySelector('.CVV-in').oninput = () =>{
        document.querySelector('.CVV').innerText = document.querySelector('.CVV-in').value;
    }