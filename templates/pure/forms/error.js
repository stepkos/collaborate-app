const error = (inputId, content) => {
    const input = document.getElementById(inputId);
    const label = document.querySelector(`label[for=${inputId}]`)

    input.style.border = "#0E111C 3px dashed";
    input.style.backgroundColor = "#BBB";
    label.style.color = "black";

    label.innerHTML = `${label.textContent} - <span style="font-weight: normal; letter-spacing: normal;">${content}</span>`;
}