import './index.css'; // Assurez-vous d'avoir le fichier style.css dans le même répertoire
import { FaGoogle } from 'react-icons/fa'
import { FaFacebook } from'react-icons/fa'
import { FaGithub } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
export const CreateAccountPage = () => {
    return (
         <div className='container'>
            <div className='form-container sign-in'>
                <form>
                    <h1>Connexion</h1>
                    <div className="social-icons">
                        <a href="/" className="icon"><FaGoogle /></a>
                        <a href="/" className="icon"><FaFacebook /></a>
                        <a href="/" className="icon"><FaGithub /></a>
                        <a href="/" className="icon"><FaLinkedin /></a>
                    </div>
                    <span>ou se connecter avec votre email</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button>Se connecter</button>
                </form>
            </div>
         </div>
    );
}

