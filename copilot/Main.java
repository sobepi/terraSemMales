import model.*;
import service.*;

public class Main {
    public static void main(String[] args) {
        AssociadoColaborador associado = new AssociadoColaborador();
        associado.alimentarLattes();
        // Testar outros casos de uso

        UniversidadeAutarquia universidade = new UniversidadeAutarquia();
        universidade.planejarProjetos();

        SistemaBancario banco = new SistemaBancario();
        banco.administrarContasAssociados();

        MecGovBr mec = new MecGovBr();
        mec.avaliarRetribuicoes();
    }
}