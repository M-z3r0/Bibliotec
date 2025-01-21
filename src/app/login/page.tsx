import './login.css';
import Link from "next/link";

export default function Login() {
    return (
        <>
        <div className="login-container">
            <div className="login-card">
                
                <h1 className="login-title">Bem Vindo!</h1>
                <p className="login-subtitle">Faça login para acessar sua conta</p>
                
                <form className="login-form">

                    {/* Campo de E-mail */}
                    <div className="form-group">
                        <label htmlFor="email">E-mail</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            placeholder="Digite seu e-mail" 
                            required 
                        />
                    </div>
                    
                    {/* Campo de Senha */}
                    <div className="form-group">
                        <label htmlFor="password">Senha</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            placeholder="Digite sua senha" 
                            required 
                        />
                    </div>
                    {/* Campo de Código da Escola */}
                    <div className="form-group">
                        <label htmlFor="school-code">Código da Escola</label>
                        <input 
                            type="number" 
                            name="school-code" 
                            id="school-code" 
                            placeholder="Digite o código da escola" 
                            required 
                        />
                    </div>
                    
                    {/* Campo de Seleção (Select) */}
                    <div className="form-group">
                        <label htmlFor="role">Selecione sua função</label>
                        <select name="role" id="role" required>
                            <option value="">Escolha sua função</option>
                            <option value="admin">Admin</option>
                            <option value="aluno">Aluno</option>
                            <option value="funcionario">Funcionário</option>
                        </select>
                    </div>
                    
                    {/* Links e Botão */}
                    <div className="link">
                        <Link href={'#'} className="forgot-password">Esqueceu a senha?</Link>
                    </div>
                    <button type="submit" className="login-button">Entrar</button>
                </form>
                
                <p className="cadastro">
                    Não tem uma conta? <Link href={'#'} className="register-link">Cadastre-se</Link>
                </p>
            </div>
        </div>
    </>
    );
}
