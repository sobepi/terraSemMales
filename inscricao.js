document.getElementById('formAssociado').addEventListener('submit', function(e) {
  e.preventDefault();

  // Limpa mensagens de erro
  document.getElementById('erro-nome').textContent = "";
  document.getElementById('erro-cpf').textContent = "";
  document.getElementById('erro-email').textContent = "";

  let nome = document.getElementById('nome').value.trim();
  let cpf = document.getElementById('cpf').value.trim();
  let email = document.getElementById('email').value.trim();

  let valid = true;

  // Validação simples
  if (nome.length < 3) {
    document.getElementById('erro-nome').textContent = "Informe o nome completo.";
    valid = false;
  }

  if (!/^\d{3}\.\d{3}\.\d{3}-\d{2}$/.test(cpf)) {
    document.getElementById('erro-cpf').textContent = "CPF no formato 000.000.000-00.";
    valid = false;
  }

  if (!/\S+@\S+\.\S+/.test(email)) {
    document.getElementById('erro-email').textContent = "E-mail inválido.";
    valid = false;
  }

  if (!valid) return;

  // Dados para envio (simula envio a uma API)
  let dados = {
    nome: nome,
    cpf: cpf,
    email: email,
    telefone: document.getElementById('telefone').value,
    endereco: document.getElementById('endereco').value,
    profissao: document.getElementById('profissao').value,
    instituicao: document.getElementById('instituicao').value,
    nascimento: document.getElementById('nascimento').value
  };

  // Simulação de envio via fetch
  fetch('/api/associado/cadastrar', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(dados)
  })
  .then(resp => resp.json())
  .then(resp => {
    document.getElementById('mensagem').textContent = resp.sucesso ? "Cadastro realizado com sucesso!" : resp.mensagem;
  })
  .catch(() => {
    document.getElementById('mensagem').textContent = "Erro ao cadastrar!";
  });
});