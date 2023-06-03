const copyButton = document.querySelector('.copy-button');

copyButton.addEventListener("click", () => {
    let pixCode = document.querySelector('#pix-code').textContent;
    let copyIcon = document.querySelector('#copy-icon');

    navigator.clipboard.writeText(pixCode);
    copyIcon.style.color = 'var(--pink)';
});
