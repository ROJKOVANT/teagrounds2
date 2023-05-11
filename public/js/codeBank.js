let cvc = document.querySelector("#bank-code-input"),
    num = /[0-9]/,
    reg = /[0-9]{2}/;

// добавляем слушатель события на инпут
cvc.addEventListener("input",(ev)=>{
    // не позволяем ввести ничего, кроме цифр 0-9, ограничиваем размер поля 5-ю символами
    if( ev.inputType === "insertText" && !num.test(ev.data) || cvc.value.length > 5){
        cvc.value = cvc.value.slice(0, cvc.value.length - 1)
        return
    }

    // обеспечиваем работу клавиш "backspace","delete"
    let value = cvc.value
    if( ev.inputType === "deleteContentBackward" && reg.test(value.slice(-2)) ){
        cvc.value = cvc.value.slice(0, cvc.value.length - 1)
        return
    }

    // добавяем пробел после 4 цифр подряд
    if( reg.test(value.slice(-2)) && value.length < 5){
        cvc.value += "/"
    }
})
