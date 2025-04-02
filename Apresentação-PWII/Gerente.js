
import Funcionario from './Funcionario.js';

class Gerente extends Funcionario {
    calcularBonus() {
        return this.salario * 0.2; // 20% bônus
    }
}

export default Gerente;
