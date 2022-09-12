function copyDivToClipboard(query) {
    let element = document.querySelector(query);

    element.select();
    element.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(element.value);
}
