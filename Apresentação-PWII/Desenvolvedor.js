
import Funcionario from './Funcionario.js';

class Desenvolvedor extends Funcionario {
    calcularBonus() {
        return this.salario * 0.1; // 10% bônus
    }
}

export default Desenvolvedor;
