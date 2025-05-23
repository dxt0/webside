// Toggle password visibility (for login/register)
document.addEventListener("DOMContentLoaded", function () {
  const passwordFields = document.querySelectorAll("input[type='password']");
  
  passwordFields.forEach((field) => {
    const toggle = document.createElement("span");
    toggle.textContent = "👁️";
    toggle.style.cursor = "pointer";
    toggle.style.marginLeft = "10px";

    toggle.addEventListener("click", () => {
      field.type = field.type === "password" ? "text" : "password";
      toggle.textContent = field.type === "password" ? "👁️" : "🙈";
    });

    field.parentNode.insertBefore(toggle, field.nextSibling);
  });
});

// Alert on successful form submission (simulation)
function showSuccess(message) {
  const div = document.createElement("div");
  div.textContent = message;
  div.style.padding = "10px";
  div.style.backgroundColor = "#d4edda";
  div.style.color = "#155724";
  div.style.margin = "10px 0";
  div.style.borderRadius = "5px";
  document.body.prepend(div);
  setTimeout(() => div.remove(), 3000);
}
