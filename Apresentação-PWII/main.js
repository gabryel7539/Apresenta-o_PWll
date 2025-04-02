
import Gerente from './Gerente.js';
import Desenvolvedor from './Desenvolvedor.js';

// imprimindo infos
function exibirInformacoes(funcionario) {
    console.log(`Nome: ${funcionario.getNome()}`);
    console.log(`Salário: R$ ${funcionario.getSalario().toLocaleString('pt-BR')}`);
    console.log(`Bônus: R$ ${funcionario.calcularBonus().toLocaleString('pt-BR')}`);
    console.log('-----------------------------');
}

// Criando objetos / instâciando
const gerente = new Gerente("Carlos Silva", 8000);
const dev = new Desenvolvedor("Ana Souza", 5000);


exibirInformacoes(gerente);
exibirInformacoes(dev);
