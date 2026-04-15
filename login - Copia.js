document.getElementById("registerForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const nome = document.getElementById("regNome").value;
  const email = document.getElementById("regEmail").value;
  const senha = document.getElementById("regSenha").value;

  fetch("registrer.php", { 
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `nome=${nome}&email=${email}&senha=${senha}`
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("regMsg").innerText = data;
  });
});