import './index.css'; // Assurez-vous d'avoir le fichier style.css dans le même répertoire
import { FaGoogle } from 'react-icons/fa'
import { FaFacebook } from'react-icons/fa'
import { FaGithub } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
export const SignInPage = () => {
    return (
         <div className='container'>
            <div className='form-container sign-in'>
                <form>
                    <h1>Inscription</h1>
                    <div className="social-icons">
                        <a href="/" className="icon"><FaGoogle /></a>
                        <a href="/" className="icon"><FaFacebook /></a>
                        <a href="/" className="icon"><FaGithub /></a>
                        <a href="/" className="icon"><FaLinkedin /></a>
                    </div>
                    <span>ou s'inscrire avec votre email personnel</span>
                    <input type="text" placeholder="Nom" />
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href='/'>Mot de passé oublié ?</a>
                    <button>S'inscrire</button>

                </form>
            </div>
         </div>
    );
}

