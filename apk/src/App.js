import logo from "./logo.svg";
import {BrowserRouter as Router, Routes, Route, Link} from "react-router-dom"
import Dashboard from "./pages/dashboard";
import About from "./pages/about";
import Achat from "./pages/achat";


function App() {
  return (
   <Router>
      <Routes>
        <Route exact path="/" element={<Dashboard/>}/>
        <Route exact path="/about" element={<About/>}/>
        <Route exact path="/achat" element={<Achat/>}/>
      </Routes>
   </Router>
  );
}

export default App;
