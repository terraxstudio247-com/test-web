import React, { useRef } from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import LuxuryCollection from './components/LuxuryCollection';
import Services from './components/Services';
import Pillars from './components/Pillars';
import Inquiry from './components/Inquiry';
import Footer from './components/Footer';
import './App.css';

function App() {
  const inquiryRef = useRef(null);

  const scrollToInquiry = () => {
    const el = document.querySelector('#contact');
    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  };

  return (
    <div className="min-h-screen bg-[#0B0C10] text-[#E5E5E5] antialiased selection:bg-[#C5A059] selection:text-[#0B0C10]">
      <Navbar onCtaClick={scrollToInquiry} />
      <main>
        <Hero onCtaClick={scrollToInquiry} />
        <LuxuryCollection onDetails={scrollToInquiry} />
        <Services />
        <Pillars />
        <Inquiry ref={inquiryRef} />
      </main>
      <Footer />
    </div>
  );
}

export default App;
