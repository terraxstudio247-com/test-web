import React, { useEffect, useState } from 'react';
import { navLinks } from '../mock';
import { Menu, X } from 'lucide-react';

const Navbar = ({ onCtaClick }) => {
  const [scrolled, setScrolled] = useState(false);
  const [open, setOpen] = useState(false);

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 24);
    window.addEventListener('scroll', onScroll);
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  const handleLink = (href) => {
    setOpen(false);
    const el = document.querySelector(href);
    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  };

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-colors duration-500 ${
        scrolled
          ? 'backdrop-blur-xl bg-[#0B0C10]/70 border-b border-[#C5A059]/15'
          : 'bg-transparent'
      }`}
    >
      <div className="max-w-7xl mx-auto px-6 md:px-10 h-20 flex items-center justify-between">
        {/* Logo */}
        <button
          onClick={() => window.scrollTo({ top: 0, behavior: 'smooth' })}
          className="flex items-baseline gap-1 group"
        >
          <span className="font-serif text-2xl tracking-[0.22em] text-[#E5E5E5] group-hover:text-[#C5A059] transition-colors">
            MAZA
          </span>
          <span className="font-serif text-2xl tracking-[0.22em] text-[#C5A059]">
            ELITE
          </span>
        </button>

        {/* Desktop Nav */}
        <nav className="hidden md:flex items-center gap-10">
          {navLinks.map((l) => (
            <button
              key={l.label}
              onClick={() => handleLink(l.href)}
              className="text-[12px] uppercase tracking-[0.28em] text-[#E5E5E5]/80 hover:text-[#C5A059] transition-colors duration-300"
            >
              {l.label}
            </button>
          ))}
        </nav>

        <div className="hidden md:block">
          <button
            onClick={onCtaClick}
            className="px-6 py-3 text-[11px] uppercase tracking-[0.3em] border border-[#C5A059] text-[#C5A059] hover:bg-[#C5A059] hover:text-[#0B0C10] transition-colors duration-300"
          >
            Request Quote
          </button>
        </div>

        {/* Mobile Toggle */}
        <button
          aria-label="Toggle menu"
          onClick={() => setOpen(!open)}
          className="md:hidden text-[#E5E5E5] hover:text-[#C5A059] transition-colors"
        >
          {open ? <X size={22} /> : <Menu size={22} />}
        </button>
      </div>

      {/* Mobile Drawer */}
      <div
        className={`md:hidden overflow-hidden transition-[max-height] duration-500 ${
          open ? 'max-h-96' : 'max-h-0'
        } bg-[#0B0C10]/95 backdrop-blur-xl border-b border-[#C5A059]/15`}
      >
        <div className="px-6 py-6 flex flex-col gap-5">
          {navLinks.map((l) => (
            <button
              key={l.label}
              onClick={() => handleLink(l.href)}
              className="text-left text-sm uppercase tracking-[0.28em] text-[#E5E5E5]/90 hover:text-[#C5A059] transition-colors"
            >
              {l.label}
            </button>
          ))}
          <button
            onClick={() => {
              setOpen(false);
              onCtaClick();
            }}
            className="mt-2 px-6 py-3 text-[11px] uppercase tracking-[0.3em] border border-[#C5A059] text-[#C5A059] hover:bg-[#C5A059] hover:text-[#0B0C10] transition-colors duration-300"
          >
            Request Quote
          </button>
        </div>
      </div>
    </header>
  );
};

export default Navbar;
