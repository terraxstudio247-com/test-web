import React from 'react';
import { Instagram, Linkedin, Mail } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="relative bg-[#0B0C10] border-t border-[#E5E5E5]/10">
      <div className="max-w-7xl mx-auto px-6 md:px-10 py-16">
        <div className="grid md:grid-cols-4 gap-12">
          <div className="md:col-span-2">
            <div className="flex items-baseline gap-1">
              <span className="font-serif text-2xl tracking-[0.18em] text-[#E5E5E5]">LAXORA</span>
              <span className="ml-1 inline-block w-1.5 h-1.5 rounded-full bg-[#14B8A6]" />
            </div>
            <p className="mt-6 text-[#E5E5E5]/55 font-light max-w-md leading-relaxed">
              Executive chauffeur services for those who measure travel in moments of
              uninterrupted productivity, privacy, and refinement.
            </p>
          </div>

          <div>
            <h4 className="text-[10px] uppercase tracking-[0.32em] text-[#C5A059] mb-5">
              Navigate
            </h4>
            <ul className="space-y-3 text-[#E5E5E5]/65 text-sm font-light">
              <li><a href="#services" className="hover:text-[#C5A059] transition-colors">Services</a></li>
              <li><a href="#fleet" className="hover:text-[#C5A059] transition-colors">Fleet</a></li>
              <li><a href="#corporate" className="hover:text-[#C5A059] transition-colors">Corporate</a></li>
              <li><a href="#contact" className="hover:text-[#C5A059] transition-colors">Contact</a></li>
            </ul>
          </div>

          <div>
            <h4 className="text-[10px] uppercase tracking-[0.32em] text-[#C5A059] mb-5">
              Concierge
            </h4>
            <ul className="space-y-3 text-[#E5E5E5]/65 text-sm font-light">
              <li>concierge@laxora.com</li>
              <li>+1 (800) LAXORA-1</li>
              <li>24 / 7 Global Operations</li>
            </ul>
            <div className="mt-6 flex items-center gap-4">
              <a href="#" aria-label="Instagram" className="text-[#E5E5E5]/55 hover:text-[#C5A059] transition-colors"><Instagram size={18} /></a>
              <a href="#" aria-label="LinkedIn" className="text-[#E5E5E5]/55 hover:text-[#C5A059] transition-colors"><Linkedin size={18} /></a>
              <a href="#contact" aria-label="Email" className="text-[#E5E5E5]/55 hover:text-[#C5A059] transition-colors"><Mail size={18} /></a>
            </div>
          </div>
        </div>

        <div className="mt-14 pt-8 border-t border-[#E5E5E5]/10 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
          <p className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/40">
            © {new Date().getFullYear()} Laxora. All Rights Reserved.
          </p>
          <p className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/40">
            Crafted for the discerning few.
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
