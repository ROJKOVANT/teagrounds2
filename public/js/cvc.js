let cv = document.querySelector("#bank-input"),
    number = /[0-9]/;

// добавляем слушатель события на инпут
cv.addEventListener("input",(ev)=>{
    // не позволяем ввести ничего, кроме цифр 0-9, ограничиваем размер поля 5-ю символами
    if( ev.inputType === "insertText" && !num.test(ev.data) || cv.value.length > 3){
        cv.value = cv.value.slice(0, cv.value.length - 1)
        return
    }

    // обеспечиваем работу клавиш "backspace","delete"
    let value = cv.value
    if( ev.inputType === "deleteContentBackward"){
        cv.value = cv.value.slice(0, cv.value.length - 1)
        return
    }
})
