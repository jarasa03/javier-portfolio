<?php

return [
    'projects' => [
        'hrmotor' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Orquestación del flujo automatizado.'],
                ['name' => 'Google My Business API', 'icon' => 'google-my-business.svg', 'note' => 'Entrada y gestión de reseñas.'],
                ['name' => 'OpenAI', 'icon' => 'openai.svg', 'note' => 'Generación de respuestas con IA.'],
                ['name' => 'Google Sheets', 'icon' => 'google-sheets.svg', 'note' => 'Revisión y validación manual.'],
            ],
        ],
        'hrmotor_chatbot' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Orquestación del chatbot.'],
                ['name' => 'OpenAI', 'icon' => 'openai.svg', 'note' => 'Motor conversacional.'],
                ['name' => 'WordPress', 'icon' => 'wordpress.svg', 'note' => 'Integración en la web de HRmotor.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Consulta y gestión de casos.'],
            ],
        ],
        'web_forms_crm' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Recepción y orquestación del webhook.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Creación de leads, tareas y eventos.'],
            ],
        ],
        'vehicle_market_price' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Orquestación del cálculo y escritura.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Actualización del vehículo con precio y URL.'],
                ['name' => 'Supabase', 'icon' => 'supabase.svg', 'note' => 'Base de datos con histórico de vehículos scrapeados.'],
            ],
        ],
        'error_notifier' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Detección y enrutado del error.'],
                ['name' => 'SMTP', 'icon' => 'email.svg', 'note' => 'Envío bonito del aviso por correo.'],
            ],
        ],
        'konecta_leads' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Carga diaria de leads y automatización de citas.'],
                ['name' => 'Google Sheets', 'icon' => 'google-sheets.svg', 'note' => 'Cola operativa y seguimiento de estados.'],
                ['name' => 'Google Apps Script', 'icon' => 'google-app-script.svg', 'note' => 'Ordenación automática por fecha y recontacto.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Agenda, descarte y creación de actividad comercial.'],
            ],
        ],
        'crm_excel_reports' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Extracción diaria y generación del XLSX.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Reservas y datos operativos del CRM.'],
                ['name' => 'SMTP', 'icon' => 'email.svg', 'note' => 'Envío del informe por correo electrónico.'],
            ],
        ],
        'commercials_training' => [
            'stack' => [
                ['name' => 'Moodle', 'icon' => 'moodle.svg', 'note' => 'Plataforma de formación en servidor propio.'],
                ['name' => 'HeyGen', 'icon' => 'heygen.svg', 'note' => 'Generación de vídeos formativos con IA.'],
                ['name' => 'YouTube', 'icon' => 'youtube.svg', 'note' => 'Vídeos privados embebidos en las lecciones.'],
                ['name' => 'Servidor propio', 'icon' => 'server.svg', 'note' => 'Despliegue público con dominio y certificado SSL.'],
            ],
        ],
        'lead_capture_chatbot' => [
            'stack' => [
                ['name' => 'WordPress', 'icon' => 'wordpress.svg', 'note' => 'Plugin de incrustación en la web.'],
                ['name' => 'JavaScript', 'icon' => 'javascript.svg', 'note' => 'Flujo interactivo de clics y preguntas.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Registro del lead y del vehículo de interés.'],
            ],
        ],
        'voice_sales_agent' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Orquestación de los flujos de voz.'],
                ['name' => 'ElevenLabs', 'icon' => 'elevenlabs.svg', 'note' => 'Motor de voz y conversación con el cliente.'],
                ['name' => 'OpenAI', 'icon' => 'openai.svg', 'note' => 'Intención, razonamiento y oferta de vehículos.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Stock, leads, citas y cuentas.'],
            ],
        ],
        'voice_call_filter' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Orquestación del filtrado y el desvío de llamadas.'],
                ['name' => 'ElevenLabs', 'icon' => 'elevenlabs.svg', 'note' => 'IA de voz para detectar motivo y origen de la llamada.'],
                ['name' => 'Twilio', 'icon' => 'twilio.svg', 'note' => 'Telefonía y redirección al departamento correcto.'],
                ['name' => 'Salesforce', 'icon' => 'salesforce.svg', 'note' => 'Creación del lead y registro del contexto.'],
            ],
        ],
        'commercials_chatbot' => [
            'stack' => [
                ['name' => 'n8n', 'icon' => 'n8n.svg', 'note' => 'Orquestación del chatbot interno.'],
                ['name' => 'OpenAI', 'icon' => 'openai.svg', 'note' => 'Motor de respuesta y razonamiento.'],
                ['name' => 'Slack', 'icon' => 'slack.svg', 'note' => 'Canal de acceso para el equipo comercial.'],
                ['name' => 'Pinecone', 'icon' => 'pinecone.svg', 'note' => 'Base de conocimiento vectorial con markdown e imágenes.'],
            ],
        ],
        'agible' => [
            'stack' => [
                ['name' => 'WordPress', 'icon' => 'wordpress.svg', 'note' => 'Base de gestión y publicación.'],
                ['name' => 'Elementor Pro', 'icon' => 'elementor.svg', 'note' => 'Construcción visual de la interfaz.'],
                ['name' => 'Figma', 'icon' => 'figma.svg', 'note' => 'Referencia del diseño original.'],
            ],
        ],
    ],
];
