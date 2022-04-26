export default function () {
    if (document.fullscreenElement && document.exitFullscreen) {
        return true;
    }
    return false;
}