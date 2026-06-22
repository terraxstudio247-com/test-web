import React, { useState } from 'react';
import { Calendar as CalendarIcon, ChevronDown, Send, CheckCircle2 } from 'lucide-react';
import { Calendar } from './ui/calendar';
import { Popover, PopoverContent, PopoverTrigger } from './ui/popover';
import { format } from 'date-fns';
import { interiorImage } from '../mock';

const Inquiry = React.forwardRef((_props, ref) => {
  const [form, setForm] = useState({
    fullName: '',
    email: '',
    pickup: '',
    destination: '',
    date: null,
    notes: '',
  });
  const [submitted, setSubmitted] = useState(false);

  const onChange = (k) => (e) => setForm((p) => ({ ...p, [k]: e.target.value }));

  const onSubmit = (e) => {
    e.preventDefault();
    // Persist locally as a teaser; backend integration later.
    try {
      const prev = JSON.parse(localStorage.getItem('laxora_inquiries') || '[]');
      prev.push({ ...form, date: form.date ? form.date.toISOString() : null, createdAt: new Date().toISOString() });
      localStorage.setItem('laxora_inquiries', JSON.stringify(prev));
    } catch (_e) { /* ignore */ }
    setSubmitted(true);
    setTimeout(() => {
      setSubmitted(false);
      setForm({ fullName: '', email: '', pickup: '', destination: '', date: null, notes: '' });
    }, 4500);
  };

  return (
    <section id="contact" ref={ref} className="relative bg-[#0B0C10] py-28 md:py-36 overflow-hidden">
      {/* Decorative side image */}
      <div className="absolute inset-y-0 right-0 hidden lg:block w-1/3">
        <img
          src={interiorImage}
          alt="Luxury interior"
          className="w-full h-full object-cover opacity-25"
        />
        <div className="absolute inset-0 bg-gradient-to-r from-[#0B0C10] via-[#0B0C10]/80 to-transparent" />
      </div>

      <div className="relative max-w-6xl mx-auto px-6 md:px-10">
        <div className="grid lg:grid-cols-5 gap-14 items-start">
          {/* Left intro */}
          <div className="lg:col-span-2">
            <div className="flex items-center gap-4 mb-6">
              <span className="h-px w-10 bg-[#C5A059]/70" />
              <span className="text-[10px] uppercase tracking-[0.5em] text-[#C5A059]">
                Inquiry Engine
              </span>
            </div>
            <h2 className="font-serif text-4xl md:text-5xl text-[#E5E5E5] leading-tight">
              Request a Bespoke Quotation.
            </h2>
            <p className="mt-6 text-[#E5E5E5]/65 font-light leading-relaxed">
              Share your itinerary, and a dedicated concierge will respond within one business hour
              with a tailored proposal — discretion guaranteed.
            </p>

            <div className="mt-10 space-y-5 pt-8 border-t border-[#E5E5E5]/10">
              <div>
                <p className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/40 mb-1">
                  Concierge
                </p>
                <p className="text-[#E5E5E5] font-light">concierge@laxora.com</p>
              </div>
              <div>
                <p className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/40 mb-1">
                  Hours
                </p>
                <p className="text-[#E5E5E5] font-light">24 / 7 — Global Operations</p>
              </div>
            </div>
          </div>

          {/* Form */}
          <form
            onSubmit={onSubmit}
            className="lg:col-span-3 bg-[#1F2833]/40 border border-[#E5E5E5]/10 backdrop-blur-md p-8 md:p-12"
          >
            {submitted ? (
              <div className="flex flex-col items-center text-center py-16">
                <CheckCircle2 size={48} className="text-[#C5A059]" strokeWidth={1.2} />
                <h3 className="mt-6 font-serif text-2xl text-[#E5E5E5]">Inquiry Received</h3>
                <p className="mt-3 text-[#E5E5E5]/65 max-w-sm">
                  Thank you. A senior concierge will reach out personally within one business hour.
                </p>
              </div>
            ) : (
              <>
                <div className="grid md:grid-cols-2 gap-6">
                  <Field label="Full Name" value={form.fullName} onChange={onChange('fullName')} placeholder="Mr. John Carter" required />
                  <Field label="Executive Email" type="email" value={form.email} onChange={onChange('email')} placeholder="name@company.com" required />
                  <Field label="Pickup Location" value={form.pickup} onChange={onChange('pickup')} placeholder="Hotel, airport, or address" required />
                  <Field label="Destination / Routing" value={form.destination} onChange={onChange('destination')} placeholder="Final destination or stops" required />

                  {/* Date picker */}
                  <div className="md:col-span-2 flex flex-col gap-2">
                    <label className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/50">
                      Service Date
                    </label>
                    <Popover>
                      <PopoverTrigger asChild>
                        <button
                          type="button"
                          className="flex items-center justify-between w-full px-4 py-3.5 bg-transparent border-b border-[#E5E5E5]/15 hover:border-[#C5A059] focus:border-[#C5A059] text-left text-[#E5E5E5] outline-none transition-colors"
                        >
                          <span className={form.date ? 'text-[#E5E5E5]' : 'text-[#E5E5E5]/35'}>
                            {form.date ? format(form.date, 'PPP') : 'Select preferred date'}
                          </span>
                          <CalendarIcon size={16} className="text-[#C5A059]" />
                        </button>
                      </PopoverTrigger>
                      <PopoverContent
                        className="w-auto p-0 bg-[#0B0C10] border border-[#C5A059]/30"
                        align="start"
                      >
                        <Calendar
                          mode="single"
                          selected={form.date}
                          onSelect={(d) => setForm((p) => ({ ...p, date: d }))}
                          initialFocus
                          className="text-[#E5E5E5]"
                        />
                      </PopoverContent>
                    </Popover>
                  </div>

                  {/* Notes */}
                  <div className="md:col-span-2 flex flex-col gap-2">
                    <label className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/50">
                      Bespoke Itinerary Requirements
                    </label>
                    <textarea
                      value={form.notes}
                      onChange={onChange('notes')}
                      rows={4}
                      placeholder="Multi-stop routing, vehicle preference, special requests…"
                      className="w-full px-4 py-3.5 bg-transparent border-b border-[#E5E5E5]/15 hover:border-[#C5A059]/60 focus:border-[#C5A059] text-[#E5E5E5] placeholder:text-[#E5E5E5]/30 outline-none resize-none transition-colors"
                    />
                  </div>
                </div>

                <div className="mt-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5">
                  <p className="text-[10px] uppercase tracking-[0.3em] text-[#E5E5E5]/40">
                    All inquiries are handled with absolute confidentiality.
                  </p>
                  <button
                    type="submit"
                    className="group inline-flex items-center gap-3 px-10 py-4 bg-[#C5A059] text-[#0B0C10] text-[11px] uppercase tracking-[0.32em] font-medium hover:bg-[#d4b06a] transition-colors duration-300"
                  >
                    Request Quote
                    <Send size={14} className="group-hover:translate-x-1 transition-transform" />
                  </button>
                </div>
              </>
            )}
          </form>
        </div>
      </div>
    </section>
  );
});

Inquiry.displayName = 'Inquiry';

const Field = ({ label, type = 'text', value, onChange, placeholder, required }) => (
  <div className="flex flex-col gap-2">
    <label className="text-[10px] uppercase tracking-[0.32em] text-[#E5E5E5]/50">{label}</label>
    <input
      type={type}
      value={value}
      onChange={onChange}
      placeholder={placeholder}
      required={required}
      className="w-full px-4 py-3.5 bg-transparent border-b border-[#E5E5E5]/15 hover:border-[#C5A059]/60 focus:border-[#C5A059] text-[#E5E5E5] placeholder:text-[#E5E5E5]/30 outline-none transition-colors"
    />
  </div>
);

export default Inquiry;
