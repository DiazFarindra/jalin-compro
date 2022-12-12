function copyToClipboard(content) {
    try {
        const temp = $("<input>");
        $("body").append(temp);
        temp.val(content).select();
        document.execCommand("copy");
        temp.remove();

        return alert('copied to clipboard!');
    } catch (error) {
        return alert('something wen\'t wrong, please try again or update your browser or change your browser!');
    }
}

function shareToWhatsapp(content) {
    try {
        window.location = `whatsapp://send?text=${content}`;
    } catch (error) {
        return alert('something wen\'t wrong, please try again or update your browser or change your browser!');
    }
}

function shareToTwitter(content) {
    try {
        window.location = `https://twitter.com/intent/tweet?text=${content}`;
    } catch (error) {
        return alert('something wen\'t wrong, please try again or update your browser or change your browser!');
    }
}

function shareToFacebook(content) {
    try {
        window.location = `https://www.facebook.com/sharer/sharer.php?u=${content}`;
    } catch (error) {
        return alert('something wen\'t wrong, please try again or update your browser or change your browser!');
    }
}
