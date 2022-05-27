/**
 * --------------------------------------------------------------------------
 * Alert Model
 * --------------------------------------------------------------------------
 */
function alertBox(alertType, alertTitle, alertDescription) {
  var alertStyle = document.getElementById("alertStyle");
  var alertName = document.getElementById("alertName");
  var alertMessage = document.getElementById("alertMessage");

  alertStyle.removeAttribute("style");
  alertStyle.classList.add("alert-".concat(alertType));

  alertName.innerHTML = alertTitle;
  alertMessage.innerHTML = alertDescription;
}
