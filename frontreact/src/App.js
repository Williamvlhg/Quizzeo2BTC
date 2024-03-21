import './App.css';
import Home from './pages/Home';  
import Login from './pages/Login';  
import { BrowserRouter, Routes, Route} from 'react-router-dom';

function App() {
  return (
    <div className="App">
        <BrowserRouter>

        <Routes>

            <Route path="/" element={<Home />} />
            <Route path="/login" element={<Login />} />
       
        </Routes>


        </BrowserRouter>

    </div>
  );
}

export default App;