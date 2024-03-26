import './App.css';
import Home from './pages/Home';  
import Login from './pages/Login';  
import Main from './pages/Main';
import { BrowserRouter, Routes, Route} from 'react-router-dom';

function App() {
  return (
    <div className="App">
        <BrowserRouter>

        <Routes>

            <Route path="/" element={<Home />} />
            <Route path="/login" element={<Login />} />
            <Route path="/main" element={<Main />} />
       
        </Routes>


        </BrowserRouter>

    </div>
  );
}

export default App;
