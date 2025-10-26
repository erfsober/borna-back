document.addEventListener("DOMContentLoaded", () => {
  const copyLinkButton = document.getElementById("copy-link-btn");
  const shareButton = document.getElementById("share-btn");

  const copyToClipboard = async (text) => {
    try {
      if (navigator.clipboard && window.isSecureContext) {
        await navigator.clipboard.writeText(text);
        return true;
      }
    } catch (_) {
      // fall through to legacy copy
    }
    // Legacy fallback
    try {
      const textarea = document.createElement("textarea");
      textarea.value = text;
      textarea.setAttribute("readonly", "");
      textarea.style.position = "fixed";
      textarea.style.top = "-9999px";
      document.body.appendChild(textarea);
      textarea.select();
      const ok = document.execCommand("copy");
      document.body.removeChild(textarea);
      return ok;
    } catch (_) {
      return false;
    }
  };

  if (copyLinkButton) {
    copyLinkButton.addEventListener("click", async () => {
      const ok = await copyToClipboard(window.location.href);
      showCopyNotification(ok ? "لینک پست کپی شد!" : "خطا در کپی لینک!");
    });
  }

  if (shareButton) {
    shareButton.addEventListener("click", async () => {
      if (navigator.share) {
        try {
          await navigator.share({ title: document.title, url: window.location.href });
        } catch (_) {
          showCopyNotification("اشتراک‌گذاری لغو شد.");
        }
      } else {
        const ok = await copyToClipboard(window.location.href);
        showCopyNotification(ok ? "لینک برای اشتراک‌گذاری کپی شد!" : "خطا در کپی لینک!");
      }
    });
  }
});

function showCopyNotification(message) {
  const existing = document.getElementById("copy-link-notification");
  if (existing) existing.remove();

  const notif = document.createElement("div");
  notif.id = "copy-link-notification";
  notif.textContent = message;
  notif.className =
    "fixed top-8 left-1/2 -translate-x-1/2 bg-primary text-white px-6 py-3 rounded-lg shadow-lg z-50 text-base";
  notif.style.transform = "translateX(-50%)";
  notif.style.transition = "opacity 0.4s";
  notif.style.opacity = "1";
  document.body.appendChild(notif);
  setTimeout(() => {
    notif.style.opacity = "0";
    setTimeout(() => notif.remove(), 500);
  }, 3000);
}
