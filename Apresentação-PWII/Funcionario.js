
class Funcionario {
    constructor(nome, salario) {
        this.nome = nome;
        this.salario = salario;
    }

    getNome() {
        return this.nome;
    }

    getSalario() {
        return this.salario;
    }

    calcularBonus() {
        return 0; // sem bonus comun
    }
}

// Exportando a classe
export default Funcionario;


//
