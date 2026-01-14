export const copyToClipboard = ($e) => {
    let element = $e.parentElement.querySelector(".ClipboardText");

    let copytext = element.value !== undefined ? element.value : element.innerText;

    console.log(copytext);

    navigator.clipboard
        .writeText(copytext)
        .then(() => {
            $e.textContent = "Copied !";
            console.log("copied");

        })
        .catch((err) => {
            console.error("Failed to copy text: ", err);
        });
};

// HTML
// <button onclick="copyToClipboard(this)>"
// Add Class ClipboardText to input
