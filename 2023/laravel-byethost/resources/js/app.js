'use strict';
window.$toast = (options = {}) => {
  options.title = options.title || "Toast";
  options.message = options.message || "";
  options.delay = options.delay || 5000;
  options.callback = options.callback || (() => { });

  if (!['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'white', 'transparent', 'gradient-primary', 'gradient-secondary', 'gradient-success', 'gradient-danger', 'gradient-warning', 'gradient-info', 'gradient-light', 'gradient-dark',].includes(options.type)) {
    options.type = "primary";
  }

  const html = `
  <div class="toast fade show animate__animated animate__backInRight" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
    <div class="toast-header">
      <div class="alert bg-${options.type} mb-0 mr-1 p-2" role="alert"> </div>
      <strong class="mr-auto">${options.title}</strong>
      <small class="sr-only">11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body ${options.message ? '' : 'sr-only'}">
      ${options.message}
    </div>
  </div>`;
  // console.log(html);
  $("#toast_container").append(html);
  setTimeout(() => {
    $("#toast_container .toast").eq(0).remove();
    options.callback();
  }, options.delay)
}
window.$toast.info = (title = "", message = "", callback = () => { }) => $toast({ title, message, callback, type: "info" });
window.$toast.success = (title = "", message = "", callback = () => { }) => $toast({ title, message, callback, type: "success" });
window.$toast.warning = (title = "", message = "", callback = () => { }) => $toast({ title, message, callback, type: "warning" });
window.$toast.danger = (title = "", message = "", callback = () => { }) => $toast({ title, message, callback, type: "danger" });

