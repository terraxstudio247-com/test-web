import React from 'react';
import { pillars } from '../mock';
import { Clock, ShieldCheck, Lock } from 'lucide-react';

const iconMap = { Clock, ShieldCheck, Lock };

const Pillars = () => {
  return (
    <section id="corporate" className="relative bg-[#0B0C10] py-28 md:py-36 border-t border-[#E5E5E5]/5">
      <div className="max-w-7xl mx-auto px-6 md:px-10">
        <div className="max-w-3xl">
          <div className="flex items-center gap-4 mb-6">
            <span className="h-px w-10 bg-[#C5A059]/70" />
            <span className="text-[10px] uppercase tracking-[0.5em] text-[#C5A059]">
              The Laxora Standard
            </span>
          </div>
          <h2 className="font-serif text-4xl md:text-5xl text-[#E5E5E5] leading-tight">
            Three Pillars. Zero Compromise.
          </h2>
          <p className="mt-6 text-[#E5E5E5]/60 font-light text-lg leading-relaxed">
            Our service philosophy is engineered around the three non-negotiables of executive travel.
          </p>
        </div>

        <div className="mt-20 grid md:grid-cols-3 gap-px bg-[#E5E5E5]/10">
          {pillars.map((p, idx) => {
            const Icon = iconMap[p.icon];
            const accents = [
              { color: '#14B8A6', soft: 'rgba(20,184,166,0.12)' },
              { color: '#C5A059', soft: 'rgba(197,160,89,0.14)' },
              { color: '#A855F7', soft: 'rgba(168,85,247,0.14)' },
            ];
            const a = accents[idx % accents.length];
            return (
              <div
                key={p.id}
                className="group relative bg-[#0B0C10] p-10 md:p-12 hover:bg-[#1F2833]/40 transition-colors duration-500"
              >
                <span
                  className="absolute top-8 right-8 font-serif text-xs tracking-[0.4em]"
                  style={{ color: a.color, opacity: 0.7 }}
                >
                  0{idx + 1}
                </span>
                <div
                  className="inline-flex items-center justify-center w-14 h-14 rounded-full"
                  style={{ backgroundColor: a.soft, color: a.color }}
                >
                  <Icon size={26} strokeWidth={1.4} />
                </div>
                <h3 className="mt-8 font-serif text-2xl text-[#E5E5E5] leading-snug">
                  {p.title}
                </h3>
                <p className="mt-5 text-[#E5E5E5]/60 font-light leading-relaxed">
                  {p.description}
                </p>
                <div
                  className="mt-10 h-px w-12 group-hover:w-24 transition-[width] duration-500"
                  style={{ backgroundColor: a.color }}
                />
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default Pillars;
